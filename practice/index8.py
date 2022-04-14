1
 23
    5
123
       10
456789
0,1,2,3,

def laptoprentals(times):
    group = {}
    main = []
    for i in times:
      if len(i) == 0:
        return 0
      for j in range(i[0],i[1]):
        main.append(j)   
    for i in main:
      if not i in group:
        group[i] = 1
      elif i in group:
        group[i] += 1
    # print(group) 
    return max(group.values())  
  
  
  [[0,2],[1,4],[3,8],[5,8],[7,8]]
[0,1,1,2,3,3,4,5,6,7]

