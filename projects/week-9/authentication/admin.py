from django.contrib import admin
from .models import (User, Currency, Wallet)


admin.site.register(User)
admin.site.register(Currency)
admin.site.register(Wallet)
