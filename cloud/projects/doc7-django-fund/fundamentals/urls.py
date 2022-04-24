from django.urls import path
from .views import (year_archive, month_archive, article_detail)

urlpatterns = [
    path('articles/<int:year>/', year_archive),
    path('articles/<int:year>/<int:month>/', month_archive),
    path('articles/<int:year>/<int:month>/<int:pk>/', article_detail),
]
