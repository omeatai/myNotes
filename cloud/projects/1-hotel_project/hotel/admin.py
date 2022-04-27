from django.contrib import admin
from .models import *

admin.site.register(User)
admin.site.register(Receptionist)
admin.site.register(Room)
admin.site.register(RoomStatus)
admin.site.register(RoomType)
admin.site.register(Booking)
admin.site.register(Payment)
admin.site.register(PaymentType)
admin.site.register(Reservation)
