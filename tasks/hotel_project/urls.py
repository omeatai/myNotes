from django.contrib import admin
from django.urls import include, path


urlpatterns = [
    path('myadmin/', admin.site.urls),
    path('', include('hotel.urls')),
]
