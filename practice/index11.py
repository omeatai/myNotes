# Do not edit the class below except for the insertKeyValuePair,
# getValueFromKey, and getMostRecentKey methods.
# Feel free to add new properties and methods to the class.
class LRUCache:
    
    def __init__(self, maxSize):
        self.maxSize = maxSize or 1
        self.pairs = {}
        self.recent = []

    def insertKeyValuePair(self, key, value):
        if len(self.pairs) >= self.maxSize:
            removedkey = self.recent[0] 
            self.recent.remove(removedkey)
            self.pairs.pop(removedkey)
            self.pairs[key] = value
            if key in self.recent:
            self.recent.remove(key)
            self.recent.append(key)
            self.printValues(self.pairs, self.recent)
            
        if not len(self.pairs) >= self.maxSize:  
            self.pairs[key] = value
            if key in self.recent:
            self.recent.remove(key)
            self.recent.append(key)
            self.printValues(self.pairs, self.recent)

    def getValueFromKey(self, key):
        if not key in self.pairs:
            self.printValues(self.pairs, self.recent)
            return None
        else:
            if key in self.recent:
                self.recent.remove(key)
            self.recent.append(key)
            self.printValues(self.pairs, self.recent)
            return self.pairs[key]

    def getMostRecentKey(self):
        return self.recent[-1]
        
    def printValues(self, *pairs):
            print(pairs)