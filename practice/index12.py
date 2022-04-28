def is_palindrome(value):
    val = value.replace(" ","").lower()
    if val == val[::-1]:
        return True
    return False

print(is_palindrome('ana a  aana'))