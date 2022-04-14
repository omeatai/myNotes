class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class LinkedList:
    def __init__(self):
        self.head = None        

    def insert(self,newNode):
        if self.head is None:
            self.head = newNode
        else:
            lastNode = self.head
            lastNode.next = newNode


firstNode = Node("John")
linkedList = LinkedList()                
linkedList.insert(firstNode)

secondNode = Node("Ben")
linkedList.insert(secondNode)

thirdNode = Node("Matthew")
linkedList.insert(thirdNode)

fourthNode = Node("Jacob")
linkedList.insert(fourthNode)



def reverse_linked_list(head):
    tail = None
    while head:
        tail, head.next, head = head,tail,head.next
    return tail


# Write a function that takes in the head of a Singly Linked List, reverses the list in place (i.e., doesn't create a brand new list), and returns its new head.

# Each LinkedList node has an integer value as well as a next node pointing to the next node in the list or to None / null if it's the tail of the list.

# You can assume that the input Linked List will always have at least one node; in other words, the head will never be None / null.

# Sample Input
# head = 0 -> 1 -> 2 -> 3 -> 4 -> 5 // the head node with value 0
# Sample Output
# 5 -> 4 -> 3 -> 2 -> 1 -> 0 // the new head node with value 5