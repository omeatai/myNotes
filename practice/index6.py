# 1. Write a python function that converts phone numbers from Nigerian country code format to the regular 080

def format(phone):
    if type(phone) != str:
        phone = str(phone)
        
    if len(phone) < 11:
        return "Invalid number"    
    return "0" + phone.replace(" ", "").replace("+", "")[-10:]
    
# print(format("+234 809 9887766"))
# print(format("+23  4707  2345   678"))
# print(format(2347078234567))
# print(format(234707))


# 2. To prove its success and gain funding, the wilderness zoo needs to prove to environmentalists that it has (x)

def find_pairs(num,string):
    arr = [char for char in string if char in {'B','8'}]
    string = ""
    check = []
    count = 0
    for i in arr:
        check.append(i)
        c_string = "".join(check[-2:]) #B8
        if c_string in {"B8", "8B"}: 
            string += c_string
            check = []
            count += 1
    num = count >= num
    return [string, num]        

print(find_pairs(6,"EvHB8KN8ik8BiyxfeyKBmiCMj"))














# 1. Write a python function that converts phone numbers from Nigerian country code format to the regular 080
#   format e.g change_code(+2348099887766) should return 08099887766.
#   The function can receive both strings and numbers. The argument to be passed into the function can either come
#   with the + sign or without it. Parameters can also contain spaces.
#   change_code("+234 809 9887 766") should return 0809887766
#   change_code(2347072345678) should return 07072345678


# 2. To prove its success and gain funding, the wilderness zoo needs to prove to environmentalists that it has (x)

#    number of mating pairs of bears. Complete the python function below to check within string(s) to find all of the
#    mating pairs, and return a string containing only those mating pairs. Line them up for inspection.
#    Rules:
#          • Bears are either 'B' (male) or '8' (female)
#          • Bears must be together in male/female pairs 'B8' or '8B'
#          • Mating pairs must involve two distinct bears each ('B8B' may look fun, but does not count as two pairs).
#          • The output of the function should be an array containing a string of only the mating pairs available. E.g:
#           'EvHB8KN8ik8BiyxfeyKBmiCMj' => 'B88B' or an empty string if there are no pairs, and True' if the number
#           is more than or equal to x, False if not
#          • Expected input: (6, 'EvHB8KN8ik8BiyxfeyKBmiCMj')
#           Expected output: ['B88B', false].