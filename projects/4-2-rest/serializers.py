from rest_framework import serializers
from .models import User

class UserSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = User
        fields = ('id', 'username', 'firstname', 'lastname', 'gender', 'age', 'password', 'is_staff', 'is_admin', 'is_superuser')
        

