<form method="post">
    <input type="number" name="first-number" placeholder="Số thứ nhất"><br>
    <input type="number" name="second-number" placeholder="Số thứ hai"><br>
    <button>Calculate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_number = $_POST['first-number'];
    $second_number = $_POST['second-number'];
    $result = calculateNumber($first_number,$second_number);
    echo "$result";
}
function calculateNumber($first_number,$second_number) {
    try {
        if ($second_number == 0){
            throw new Exception("/ by zero");
        }
        $result1 = $first_number + $second_number;
        $result2 = $first_number - $second_number;
        $result3 = $first_number * $second_number;
        $result4 = $first_number / $second_number;

        return "<strong>Với x=$first_number, y=$second_number</strong><br>Tổng x+y= $result1<br>Hiệu x-y= $result2<br>Tích x * y = $result3<br>Thương x / y = $result4";
    }catch (Exception $exception){
        return $exception->getMessage();
    }
}

