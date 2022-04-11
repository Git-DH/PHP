<?php
    $score = rand(0, 120);
    print "점수 : $score <br>";

  switch($score)
  {
    case ($score>100 || $score<0):
        print "잘못된 값";
        break;

    case ($score<=100 && $score>=97):
        print "A+";
        break;
        
    case ($score>93 && $score<=96):
        print "A";
        break;

    case ($score>=90 && $score<=93):
        print "A-";
        break;

    case ($score<90 && $score>=87):
        print "B+";
        break;
        
    case ($score>83 && $score<=86):
        print "B";
        break;
    
    case ($score>=80 && $score<=83):
        print "B-";
        break;

    case ($score<80 && $score>=76):
        print "C+";
        break;
            
    case ($score>73 && $score<=76):
        print "C";
        break;
        
    case ($score>=70 && $score<=73):
        print "c-";
        break;

    case ($score<70 && $score>=67):
        print "D+";
        break;
                
    case ($score>63 && $score<=66):
        print "D";
        break;
            
    case ($score>=60 && $score<=63):
        print "D-";
        break;
    
        case ($score<60 && $score>=0):
        print "F";
        break;
  }
?>