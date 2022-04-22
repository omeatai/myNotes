from django.contrib import admin
from watchlist_app.models import (StreamPlatform, WatchList, Movie, Review)

admin.site.register(StreamPlatform)
admin.site.register(WatchList)
admin.site.register(Review)
admin.site.register(Movie)
