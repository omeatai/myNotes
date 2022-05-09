from django.urls import path

from authentication import views

urlpatterns = [
    path('register/', views.RegisterApiView.as_view(), name='register'),
    path('verify-email/', views.VerifyEmailApiView.as_view(), name='verify-email')
]
