from django.urls import path
from .views import index


urlpatterns = [
    path('meetups/', index, name='index'),
]