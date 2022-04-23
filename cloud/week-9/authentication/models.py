
from datetime import datetime, timedelta
from django.conf import settings
from django.contrib.auth.models import AbstractUser
from django.db import models
import jwt


class User(AbstractUser):
    # first_name = models.CharField(max_length=100)
    # last_name = models.CharField(max_length=100)
    # username = models.CharField(max_length=100)
    # email = models.EmailField(max_length=100)
    # password = models.CharField(max_length=200)
    otp = models.IntegerField(default=0, blank=True, null=True)
    # is_active = models.BooleanField(default=False)
    is_noob = models.BooleanField(default=True)
    is_elite = models.BooleanField(default=False)
    is_admin = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        if self.is_noob:
            user_role = "Noob"
        elif self.is_elite:
            user_role = "Elite"
        elif self.is_admin:
            user_role = "Admin"
        else:
            user_role = None   
                    
        return f"{self.first_name} {self.last_name} (Role={user_role})"


    @property
    def token(self):
        tk = jwt.encode({'user': self.username, 'email': self.email, 'exp': datetime.utcnow() + timedelta(hours=24)}, settings.SECRET_KEY, algorithm='HS512')
        return tk


class Currency(models.Model):
    name = models.CharField(max_length=100)
    symbol = models.CharField(max_length=10)  
    # (AED,GBP,JPY,EUR,CAD,AUD)

    def __str__(self):
        return f"{self.name} - {self.symbol}" 


class Wallet(models.Model):
    name = models.CharField(max_length=100)
    username_id = models.ForeignKey(User, on_delete=models.CASCADE)
    currency_id = models.ForeignKey(Currency, on_delete=models.CASCADE)
    amount = models.FloatField(default=0)

    def __str__(self):
        return f"{self.currency_id.name} WALLET for {self.username_id.first_name} {self.username_id.last_name} | Amount = {self.amount} {self.currency_id.symbol}" 



# class BaseQuoteSymbol(models.Model):
#     # (British Pound/Japanese Yen)
#     name = models.CharField(max_length=100)
#     # (GBP/JPY) 
#     pair = models.CharField(max_length=100) 

#     def __str__(self):
#         return self.pair   

# class WalletType(models.Model):
#     # (AED_WALLET/USD_WALLET/UNIVERSAL)
#     name = models.CharField(max_length=100)
#     # (Currency.id) 
#     currency_id = models.ManyToManyField(Currency) 

#     def __str__(self):
#         return self.name      

# class Rate(models.Model):
#     # (Currency.id)
#     base_currency_id = models.ForeignKey(Currency, related_name="base_currency_id", on_delete=models.CASCADE)
#     # (Currency.id) 
#     quote_currency_id = models.ForeignKey(Currency, related_name="quote_currency_id", on_delete=models.CASCADE) 
#     # (BaseQuoteSymbol.id)
#     base_quote_symbol_id = models.ForeignKey(BaseQuoteSymbol, on_delete=models.CASCADE)
#     # (0.92708) 
#     current_rate = models.FloatField()

#     def __str__(self):
#         return self.base_quote_symbol_id.pair
