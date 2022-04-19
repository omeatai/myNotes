def palindrome_chain_length(n):

    def convert_to_str(num):
        return str(num)

    def reverse_num(str_num):
        return str_num[::-1]


    def check(str_num):
        str_num = list(str_num)
        print(str_num)
        left = 0
        right = len(str_num)-1
        while left <= right:
            if str_num[left] != str_num[right]:
                return False
            else:
                left += 1
                right -= 1
            return True    
        
    str_num = convert_to_str(n)
    count = 0

    while check(str_num) == False:
        mirror = reverse_num(str_num)
        str_num = str(int(str_num) + int(mirror))
        count += 1
        

    return count







def accum(s):
    arr = list(s)
    str=""
    for index,i in enumerate(arr):
      if index == 0:
        str += f"{i.upper()}-"
      else:
        for j in range(index+1):
          
          if j == 0:
            str += i.upper()
          else:
            str += i.lower()
        if index != len(arr)-1:    
          str += '-'   
        
       
    return str
