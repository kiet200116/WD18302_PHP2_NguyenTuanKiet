<?php
echo"PC06947 - Lab 1.1 <br>";



$courses =[
    'block1'=> 'Lap trinh php 2',
    'block2'=>'html5',
    'block3'=>'duanmau'
];

//model


function get_courses():array{
    global $courses;
    return array_values($courses);
};
/**
 * @param string $block
 * Ham nay kiem tra coi no co cai khoa hoc gi do k
 */
function find_by_block($block){
    global $courses;
    return array_key_exists($block,$courses)?$courses[$block]:"Invalid Courses";
}
 
// Controller
$list_of_courses = get_courses();
$block=(!empty($_GET['block'])) ? $_GET['block']  : '';
$courses_name = find_by_block($block);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1</title>
</head>
<body>
    <h1><?= $courses_name  ?></h1>
    <form action="">
        <select name="block" id="">
            <?php foreach($list_of_courses as $key=>$value):  ?>
            <option value="<?= $key ?>"  > <?= $value?></option>
<?php endforeach; ?>
            
        </select>
        <button class="submit">tim</button>
    </form>
</body>
</html>