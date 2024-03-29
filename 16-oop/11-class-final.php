<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Final</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
             from-blue-900
             to-green-100
             min-h-screen">
    
    <main class="m-10 
                 mx-auto
                 max-w-lg
                 p-5 
                 border-2
               border-blue-900
               bg-white/5
                 rounded ">
        <h1 class="m-5 
                   text-center 
                   text-4xl 
                   text-black 
                   text-opacity-50 
                   font-medium">
            <a href="index.php" class="float-left
                                       transition
                                       hover:text-white
                                       hover:-translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            Class Final
        </h1>
        <section class="bg-black
                         text-white
                         text-opacity-75
                         p-5   
                         min-h-[400px]
                         rounded">
            <?php
                final class Fruit {
                    private $name;
                    private $color;

                    public function __construct($name, $color) {
                        $this->name = $name;
                        $this->color = $color;
                    }

                    public function showInfoFruit() {
                        return '<p class="mb-2 p-4 ring-1 ring-white/50 rounded"> <b>Name: </b>'.
                                    $this->name.'  <b>Color:</b> '.
                                    $this->color.
                                '</p>';
                    }
                }
                # Error: Class Orange cannot extend final class Fruit
                # class Orange extends Fruit { }
                $fr = new Fruit('Pinapple', 'Yellow');
                echo $fr->showInfoFruit();

                $fr = new Fruit('Apple', 'Green');
                echo $fr->showInfoFruit();

                $fr = new Fruit('Blueberry', 'Dark Purple');
                echo $fr->showInfoFruit();
            ?>
        </section>
    </main>
    
</body>
</html>