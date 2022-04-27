from rest_framework import serializers
from .models import User

class RegisterSerializer(serializers.HyperlinkedModelSerializer):
    password = serializers.CharField(
        max_length=200, min_length=6, write_only=True)
    
    class Meta:
        model = User
        fields  = ('id', 'url', 'username', 'first_name', 'last_name', 'email', 'password')




# class UserSerializer(serializers.HyperlinkedModelSerializer):
#     class Meta:
#         model = User
#         fields = ('id', 'url', 'username', 'first_name', 'last_name', 'email', 'phone_number', 'password')

    # def validate(self,attrs):
    #     email = attrs.get('email', '')
    #     username = attrs.get('username', '')
        
    #     if not username.isalnum():
    #         raise serializers.ValidationError(
    #             'The username should only contain alphabetic characters'
    #         )
    #     return attrs 
    
    # def create(self, validated_data):
    #     return User.objects.create_user(**validated_data)