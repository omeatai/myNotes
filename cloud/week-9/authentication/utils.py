from django.core.mail import EmailMessage


class Utils:
    @staticmethod
    def send_email(data):
        email = EmailMessage(
            subject=data['subject'], body=data['body'], to=[data['receiver']]
        )
        email.send()
