<html>
<head>
    <title>Chessboard</title>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
        }
        
        .row {
            display: flex;
        }
        
        .cell {
            width: 50px;
            height: 50px;
        }
        
        .white {
            background-color: #ffffff;
        }
        
        .black {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo '<div class="row">';
            
            for ($col = 0; $col < 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo '<div class="cell ' . $color . '"></div>';
            }
            
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>