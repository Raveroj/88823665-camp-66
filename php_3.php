<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1>แม่สูตรคูณ</h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">กรอกแม่สูตรคูณ</label>
                    <input name="สูตรคูณ" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ex. 2"> <!--  [ input name="สูตรคูณ" ] ส่วนที่จะรับข้อมูลแล้ว จะส่งไปคำนวณหลัง submit-->
                </div>
               
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_POST['สูตรคูณ']) && is_numeric($_POST['สูตรคูณ'])) { //ส่วนคำนวณ if (isset($_POST['สูตรคูณ']) && is_numeric($_POST['สูตรคูณ'])) {$number = (int) $_POST['สูตรคูณ'];
                                                                          /*
                                                                            isset($_POST['สูตรคูณ']):
                                                                            เช็คว่ามีการส่งค่า สูตรคูณ มาไหม.
                                                                            is_numeric($_POST['สูตรคูณ']):
                                                                            ตรวจสอบว่าค่าที่กรอกเป็นตัวเลขไหม.
                                                                             หากเงื่อนไขเป็นจริง จะคำนวณตารางสูตรคูณ.*/
                $number = (int) $_POST['สูตรคูณ'];
                echo "<h2>ตารางสูตรคูณแม่ $number</h2>";
                echo "<table class='table table-bordered'>";
                for ($i = 1; $i <= 12; $i++) {// LOOP
                    $result = $number * $i;
                    echo "<tr><td>$number x $i</td><td>$result</td></tr>";
                }
                echo "</table>";
            }elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<div class='alert alert-danger'>กรุณากรอกใหม่อีกครั้ง</div>";
            }
        
            ?>
        </div>
    </body>
</html>

