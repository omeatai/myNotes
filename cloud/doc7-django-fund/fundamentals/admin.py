from django.contrib import admin
from .models import (Reporter, Article, Blog, Author, Entry)

admin.site.register(Reporter)
admin.site.register(Article)
admin.site.register(Blog)
admin.site.register(Author)
admin.site.register(Entry)