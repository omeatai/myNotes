from django.conf import settings
import jwt
from rest_framework import exceptions
from rest_framework.authentication import get_authorization_header, BaseAuthentication

from authentication.models import User


class JWTAuthentication(BaseAuthentication):
    def authenticate(self, request):
        auth_header = get_authorization_header(request)
        if auth_header:
            auth_data = auth_header.decode('utf-8')
            auth_token = auth_data.split(" ")
            if len(auth_token) != 2:
                raise exceptions.AuthenticationFailed('Invalid Token Provided')
            token = auth_token[1]
        else:
            if 'jwt' in request.COOKIES:
                token = request.COOKIES['jwt']
            else:
                raise exceptions.AuthenticationFailed('Missing Cookies and Token')
        try:
            payload = jwt.decode(token, settings.SECRET_KEY, algorithms='HS512')
            username = payload['user']

            user = User.objects.get(username=username)
            return (user, token,)

        except jwt.ExpiredSignatureError as ex:
            raise exceptions.AuthenticationFailed(f'Token is expired. Do login again! Error: {ex}')

        except jwt.DecodeError as ex:
            raise exceptions.AuthenticationFailed(f'Invalid Token Error: {ex}')

        except User.DoesNotExist as ex:
            raise exceptions.AuthenticationFailed(f'User does not exist Error: {ex}')

        return super().authenticate(request)
