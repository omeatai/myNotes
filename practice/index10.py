# class Graph:
#     def __init__(self, graph_dict = None):
#         if graph_dict is None:
#             graph_dict = {}
#         self.graph_dict = graph_dict

#     def vertices (self):
#         # return the vertices
#         return list(self.graph_dict.keys())

# graph_elements = {
#     "a": ["b", "c"],
#     "b": ["a", "d"],
#     "c": ["a", "d"],
#     "d": ["e"],
#     "e": ["d"]
# }
    
# g = Graph(graph_elements)
# print(g.vertices())


class Graph:
    def __init__(self, graph_dict = None):
        if graph_dict is None:
            graph_dict = {}
        self.graph_dict = graph_dict

    def edges(self):
        # return the edges
        mylist = []
        #first
        mylist.append({self.graph_dict["a"][0],self.graph_dict["b"][0]})
        #second
        mylist.append({self.graph_dict["a"][0],self.graph_dict["b"][1]})
        #third
        mylist.append({self.graph_dict["d"][0],self.graph_dict["b"][1]})
        #fourth
        mylist.append({self.graph_dict["c"][0],self.graph_dict["a"][1]})
        
        
        return mylist

graph_elements = {
    "a": ["b", "c"],
    "b": ["a", "d"],
    "c": ["a", "d"],
    "d": ["e"],
    "e": ["d"]
}

g = Graph(graph_elements)
print(g.edges())
