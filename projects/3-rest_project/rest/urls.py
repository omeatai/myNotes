from django.urls import include, path
from . import views
from rest_framework import routers

router = routers.DefaultRouter()
router.register('rest', views.UserView)

urlpatterns = [
    path('', include(router.urls))
]