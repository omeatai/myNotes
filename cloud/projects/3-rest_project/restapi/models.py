from django.db import models
from django.utils import timezone
from django.contrib.auth.models import (AbstractUser, AbstractBaseUser, BaseUserManager, PermissionsMixin)

class User(AbstractUser):
    email_verified = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True, null=True)
    updated_at = models.DateTimeField(auto_now=True, null=True)
    
    def __str__(self):
        return f'User: {self.username.title()} - {self.email}'






# class UserManager(BaseUserManager):
    
#     def create_user(self, username, email, password=None):
#         if username is None:
#             raise TypeError('Users should have a username')
#         if email is None:
#             raise TypeError('Users should have an Email')

#         user = self.model(username=username, email=self.normalize_email)
#         user.set_password(password)
#         user.save()
        
#     def create_superuser(self, username, email, password=None):
#         if password is None:
#             raise TypeError('Password should not be None')

#         user = self.create_user(username, email, password)
#         user.is_superuser = True
#         user.is_staff= True
#         user.save()
#         return user    

# class User(AbstractBaseUser, PermissionsMixin):
#     username = models.CharField(max_length=255, unique=True, db_index=True)
#     email = models.EmailField(max_length=255, unique=True, db_index=True)
#     is_verified = models.BooleanField(default=False)
#     is_active = models.BooleanField(default=True)
#     is_staff = models.BooleanField(default=True)
#     created_at = models.DateTimeField(default=timezone.now)
#     updated_at = models.DateTimeField(default=timezone.now)
    
#     USERNAME_FIELD = 'email'
#     REQUIRED_FIELDS = ['username']
    
#     objects = UserManager()
    
#     def __str__(self):
#         return self.email
    
#     def tokens(self):
#         return ''



