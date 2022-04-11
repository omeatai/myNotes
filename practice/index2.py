
from random import randint
from math import sqrt

class Matrix:
    def __init__(self):
        self.matrix = []

    def initialise_matrix(self, size):
        """
            Generates an n x n matrix based on the `size` passed in as parameter.
            For example: if size = 3, then a 3 by 3 matrix would be generated.
        """
        for row in range(0,size):
            self.matrix.append([])
            for col in range(0,size):
                value = randint(0,99)
                self.matrix[row].append(value)
        return self.matrix
    
    def display_matrix(self):
        """
            Displays the square matrix as a 2D grid.
        """
        length = len(self.matrix)
        for row in range(0, length):
            st = "| " 
            for col in range(0, length):
                if self.matrix[row][col] < 10:
                    st = st + str(self.matrix[row][col]) + "  | "
                else:
                    st = st + str(self.matrix[row][col]) + " | "
            print(st)

    def calculate_diagonal_diff(self):
        sum = []   
        row = 0   
        column = 0  
        for index,row in enumerate(range(len(self.matrix))):
            for jindex,column in enumerate(range(len(self.matrix))):
                sum = self.matrix[index][jindex]
        return sum  

    def calculate_corner_sum(self):
        sum = []
        for index,i in enumerate(self.matrix):
                sum += self.matrix[index]
        return sum  

matrix = Matrix()
matrix.initialise_matrix(3)
matrix.display_matrix()
print(matrix.calculate_diagonal_diff())
print(matrix.calculate_corner_sum())




































# class Student: 
#     def __init__(self,name,marks):
#         self.name = name
#         self.marks = marks
#     def report(self):
#         return f"{self.name} got {self.marks}%."
    
#     @classmethod
#     def get_percentage(cls,name,marks):    
#         return cls(name.upper(),"{:.2f}".format((marks/600)*100))

#     @staticmethod
#     def get_age(age):
#         return "Too young for College." if age<17 else "Ready for College."

# student1 = Student("Mike",520)
# print(student1.get_age(16))
# print(student1.get_age(20))

# student2 = Student.get_percentage("Mike",520)
# print(student2.report())





# def solve(number):
#     if number >= 0 and number < 21:
#         return {
#             0: "0",
#             1: "1st",
#             2: "2nd",
#             3: "3rd",
#             4: f"{number}th"
#         }[min(4,number)]
#     elif number >= 21 and number < 100:
#         num_last = int(str(number)[-1:])
#         return {
#             0: f"{number}th",
#             1: f"{number}st",
#             2: f"{number}nd",
#             3: f"{number}rd",
#             4: f"{number}th"
#         }[min(4,num_last)]
#     elif number >= 100:
#         num_last = int(str(number)[-2:])
#         return {
#             0: f"{number}th",
#             1: f"{number}st",
#             2: f"{number}nd",
#             3: f"{number}rd",
#             4: f"{number}th"
#         }[min(4,num_last)]    
        
        
# print(solve(111))        
        
