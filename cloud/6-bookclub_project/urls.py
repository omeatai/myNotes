from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='home'),
    path('comment/', views.comment, name='comment'),
    path('register/', views.register, name='register'),
    path('login/', views.login, name='login'),
    path('logout/', views.logout, name='logout'),
]