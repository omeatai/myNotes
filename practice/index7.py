def sjf(jobs: list, index: int) -> int:
    
    num = jobs[index]
    jobs.sort()
    times = 0
    lock = 0
    
    if jobs.count(num) > 1:
        #check for fifo condition
        for index2,i in enumerate(jobs):
            if i != num and lock == 0:
                times += i
            elif i == num and index2 <= index:  
                lock = 1
                times += i 
        return times   
    else: 
        #check for non fifo condition
        for i in jobs:
            if i != num and lock == 0:
                times += i
            elif i == num:  
                lock = 1
                times += i
        return times
    
print(sjf([3,10,10,20,1,2], 3))