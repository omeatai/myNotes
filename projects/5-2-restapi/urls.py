from django.urls import include, path
from . import views
from rest_framework import routers

router = routers.DefaultRouter()
router.register('restapi', views.RegisterView)

urlpatterns = [
    path('', include(router.urls))
]



# urlpatterns = [
#     path('register/', views.RegisterView.as_view(), name='register')
# ]

