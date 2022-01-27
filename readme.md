# University system (PHP (mySQL))
====================================
# Database 
    -Entity:
        -Doctors : id , name > (CRUD)
        -Students :id , name , levelID > (CRUD)
        -registcourse : id , StudentID , CourseID > (CRD)
        -Courses :id ,name > (CRUD) 
        -courseDr : id, doctorID ,CourseID  > (CRD)
        -levels : id, Year > Read Only (R)
==========================================        
# Relations
    -Students ha one Level 
    -registcourse has one Students and one Courses
    -courseDr has one Doctors and one Courses
=============================================    
## DEsign 
=============================================
