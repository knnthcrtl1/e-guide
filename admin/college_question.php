<?php

function collegeQuestion($row="")
{

?>
    <div class="row">
        <div class="col-lg-6">
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">I Feel</label>
                    <input type="text" name="college-question-1" class="form-control" value="<?php echo $row['tbl_college_answer1'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My family is</label>
                    <input type="text" name="college-question-2" class="form-control" value="<?php echo $row['tbl_college_answer2'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My father is</label>
                    <input type="text" name="college-question-3" class="form-control" value="<?php echo $row['tbl_college_answer3'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My mother is</label>
                    <input type="text" name="college-question-4" class="form-control" value="<?php echo $row['tbl_college_answer4'] ?>"> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My siblings are</label>
                    <input type="text" name="college-question-5" class="form-control " value="<?php echo $row['tbl_college_answer5'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My childhood was</label>
                    <input type="text" name="college-question-6" class="form-control" value="<?php echo $row['tbl_college_answer6'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My past school experiences were</label>
                    <input type="text" name="college-question-7" class="form-control" value="<?php echo $row['tbl_college_answer7'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My love life is</label>
                    <input type="text" name="college-question-8" class="form-control" value="<?php echo $row['tbl_college_answer8'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My spiritual life is</label>
                    <input type="text" name="college-question-9" class="form-control" value="<?php echo $row['tbl_college_answer9'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">I fear</label>
                    <input type="text" name="college-question-10" class="form-control" value="<?php echo $row['tbl_college_answer10'] ?>">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My priorities are</label>
                    <input type="text" name="college-question-11" class="form-control" value="<?php echo $row['tbl_college_answer11'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My greatness strength is</label>
                    <input type="text" name="college-question-12" class="form-control" value="<?php echo $row['tbl_college_answer12'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My greatness weakness is</label>
                    <input type="text" name="college-question-13" class="form-control" value="<?php echo $row['tbl_college_answer13'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">When i have problems, I</label>
                    <input type="text" name="college-question-14" class="form-control" value="<?php echo $row['tbl_college_answer14'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My life is</label>
                    <input type="text" name="college-question-15" class="form-control" value="<?php echo $row['tbl_college_answer15'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">The best option to solve the problem is</label>
                    <input type="text" name="college-question-16" class="form-control" value="<?php echo $row['tbl_college_answer16'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">I see the future as</label>
                    <input type="text" name="college-question-17" class="form-control" value="<?php echo $row['tbl_college_answer17'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">My friends are</label>
                    <input type="text" name="college-question-18" class="form-control" value="<?php echo $row['tbl_college_answer18'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">I am taking this course because</label>
                    <input type="text" name="college-question-19" class="form-control" value="<?php echo $row['tbl_college_answer19'] ?>">
                </div>
            </div>
        </div>
    </div>
<?php
}
?>