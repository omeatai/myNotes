# # Implement 3 classes, School, Team, and Player, such that an instance of a School should contain instances of Team objects. 
# # Similarly, a Team object can contain instances of Player class.
# # You have to implement a School class containing a list of Team objects and a Team class comprising a list of Player objects.
# # Task 1#
# # The Player class should have three properties that will be set using an initializer:
# # ID
# # name
# # teamName
# # Task 2#
# # The Team class will have two properties that will be set using an initializer:
# # name
# # players: a list with player class objects in it
# # It will have two methods:
# # addPlayer(), which will add new player objects in the players list
# # getNumberOfPlayers(), which will return the total number of players in the players list
# # Task 3#
# # The School class will contain two properties that will be set using an initializer:
# # teams, a list of team class objects
# # name
# # It will have two methods:
# # addTeam, which will add new team objects in the teams list
# # getTotalPlayersInSchool(), which will count the total players in all of the teams in the School and return the count



#1 Task 1. Count number of vowels
# Return the number (count) of vowels in the given string.
# We will consider a, e, i, o, u as vowels.
# The input string will only consist of lower case letters and/or spaces.
# def get_count(sentence):
#     pass
# print(get_count("foling blue trashy"))


#2 Task 2. Find the divisors
# Create a function named divisors that takes an integer (n > 1) and returns an array with all of the integer's divisors(except for 1 and the number itself), from smallest to largest.
# If the number is prime return the string ‘(integer) is prime’.
# Example:
# divisors(12); #should return [2,3,4,6]
# divisors(25); #should return [5]
# divisors(13); #should return "13 is prime"
# def divisors(integer):
#     pass
# print(divisors(12))


#3 Task 3. Binary Search
# Write a function that takes in a sorted array of integers as well as a target integer.
# The function should use the Binary Search algorithm to determine if the target integer is contained in the array and should return its index if it is, otherwise -1 .
# def binarySearch(array, target):
#     pass
# binarySearch([2,3,5,7,8,10,12,14,15,17,20], 15)

#4 Task 4. Find the unique number
# There is an array with some numbers. All numbers are equal except for one. Try to find it! For Example:
# find_uniq([ 1, 1, 1, 2, 1, 1 ]) == 2
# find_uniq([ 0, 0, 0.55, 0, 0 ]) == 0.55
# def find_uniq(arr):
# print(find_uniq([ 1, 1, 1, 2, 1, 1 ]))

#5 Task 5. Who likes it?
# Implement the function which takes an array containing the names of people that like an item.
# It must return the display text as shown in the examples:
# []                                -->  "no one likes this"
# ["Peter"]                         -->  "Peter likes this"
# ["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
# ["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
# ["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"
# def likes(names):
#     pass
# print(likes([]))
# print(likes(['Alex']))
# print(likes(['Alex','Jacob']))
# print(likes(['Alex','Jacob','John']))
# print(likes(['Alex','Jacob','John','Mark']))

#6 Task 6. Make an arithmetic function
# Given two numbers and an arithmetic operator (the name of it, as a string), return the result of the two numbers having that operator used on them.
# a and b will both be positive integers, and a will always be the first number in the operation, and b always the second.
# The four operators are "add", "subtract", "divide", "multiply".
# For Example:
# 5, 2, "add"      --> 7
# 5, 2, "subtract" --> 3
# 5, 2, "multiply" --> 10
# 5, 2, "divide"   --> 2.5
# def arithmetic(a, b, operator):
#     pass
# print(arithmetic(5, 2, "add"))
# print(arithmetic(5, 2, "subtract"))
# print(arithmetic(5, 2, "multiply"))
# print(arithmetic(5, 2, "divide"))

# 7. Task 7. Duplicate Encoder
# The goal of this exercise is to convert a string to a new string where each character in the new string is "(" if that character appears only once in the original string, or ")" if that character appears more than once in the original string.
# Ignore capitalization when determining if a character is a duplicate. For Example:
# "din"      =>  "((("
# "recede"   =>  "()()()"
# "Success"  =>  ")())())"
# "(( @"     =>  "))(("
# def duplicate_encode(word):
#     pass
# print(duplicate_encode("Success"))

# 8. Task 8. Square of squares
# You have to check if a number is a perfect square. For Example:
# -1  =>  false
#  0  =>  true
#  3  =>  false
#  4  =>  true
# 25  =>  true
# 26  =>  false
# def is_square(n):
#     pass
# print(is_square(26))

# 9. Task 9. Consecutive strings
# You are given an array(list) strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array. For example:
# strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], k = 2
# Concatenate the consecutive strings of strarr by 2, we get:
# treefoling   (length 10)  concatenation of strarr[0] and strarr[1]
# folingtrashy ("      12)  concatenation of strarr[1] and strarr[2]
# trashyblue   ("      10)  concatenation of strarr[2] and strarr[3]
# blueabcdef   ("      10)  concatenation of strarr[3] and strarr[4]
# abcdefuvwxyz ("      12)  concatenation of strarr[4] and strarr[5]
# Two strings are the longest: "folingtrashy" and "abcdefuvwxyz".
# The first that came is "folingtrashy" so 
# longest_consec(strarr, 2) should return "folingtrashy".
# In the same way:
# longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
# def longest_consec(strarr, k):
#     pass
# longest_consec(["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], k = 2)













