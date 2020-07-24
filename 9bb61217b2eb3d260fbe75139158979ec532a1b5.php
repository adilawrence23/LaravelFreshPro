<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1><?=htmlspecialchars($name, ENT_QUOTES) ?></h1> Using Traditional PHP -->
    <h1><?php echo e($name); ?></h1> 
    <!-- Using Laravel -->
</body>
</html><?php /**PATH C:\Users\amdin\freshproject\resources\views/home.blade.php ENDPATH**/ ?>