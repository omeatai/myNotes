from django.urls import path
from .views import (article_list, article_detail)
from rest_framework.urlpatterns import format_suffix_patterns

urlpatterns = [
    path('articles/', article_list),
    path('articles/<int:pk>/', article_detail)
]

urlpatterns = format_suffix_patterns(urlpatterns)