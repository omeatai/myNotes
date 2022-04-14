mylist = [True,True,False,True]
mylist2 = [False,False,False,False]
mylist3 = [True,True,True,True]

print(all(mylist))
print(all(mylist2))
print(all(mylist3))
print(any(mylist))
print(any(mylist2))
print(any(mylist3))
    
    
class Stack:      
    def __init__(self):        
        self.items = [] 
                    
    def push(self, item):        
        return self.items.append(item)    
            
    def pop(self):        
        return self.items.pop() 
                
    def peek(self):        
        return self.items[0] 
                
    def size(self):        
        return len(self.items)


class Queue:      
    def __init__(self):        
        self.items = []  
                    
    def enqueue (self, item):        
        return self.items.append(item)
            
    def dequeue (self):        
        return self.items.pop(0)   
            
    def size(self):        
        return len(self.items)

val = Queue()
val.enqueue(1)
val.enqueue(2)
val.enqueue(3)
print(val.items)





































































# def reduce_directions(directions: list) -> list:
#     cancels = {
#         "NORTH": "SOUTH",
#         "SOUTH": "NORTH",
#         "EAST": "WEST",
#         "WEST": "EAST",
#     } 
#     count = 1
#     while count == 1:
#         for index,item in enumerate(directions):
#             next = index + 1
#             prev = index - 1
#             if directions[next] == cancels[item]:
#                 directions.pop(next)
#                 directions.pop(index)
#                 count=1
#             elif directions[prev] == cancels[item]:
#                 directions.pop(prev)
#                 directions.pop(index)
#                 count=1
#             else:
#                 count = 0  
#     return directions        

# directions = ["NORTH", "SOUTH", "EAST", "SOUTH", "NORTH", "WEST"]          
# print(reduce_directions(directions))



