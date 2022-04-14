student_scores = {
    "Olusola": {
        "python": 99,
        "agile": 75,
        "frontend": 40,
    },
    "Josiah": {
        "python": 50,
        "agile": 62,
        "frontend": 85,
    },
    "Mark": {
        "python": 74,
        "agile": 95,
        "frontend": 85,
    }
}


def find_top_students(student_scores):
    new_dict = {}
    for student,courses in student_scores.items():
        for course in courses.items():
            x = [student,course[0],course[1]]
            print(x)
            
            if x[1] not in new_dict:
                new_dict[x[1]] = x[2]
            # elif course[1] > new_dict[course[1]]:
            #     new_dict[course[0]] = course[1]      
            

find_top_students(student_scores)            