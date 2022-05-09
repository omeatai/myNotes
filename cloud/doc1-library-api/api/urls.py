from django.urls import path
from api.views import BookAPIView

urlpatterns = [
    path('', BookAPIView.as_view()),
]