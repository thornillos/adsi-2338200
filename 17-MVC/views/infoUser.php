<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>simple MVC</title>
        <link rel="stylesheet" href="public/css/custom.css">
        <script src="public/js/tailwind.3.2.1.js"></script>
    </head>
    <body>
        <main class="my-10 mx-auto p-10 w-11/12 bg-black/40 rounded md:w-8/12">
            <!-- Area de trabajo -->
            <header class="text-white/60 flex gap-4 justify-center items-center">
                <svg class="w-10 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <h1 class="text-3xl font-semibold">List All Users</h1>
            </header>
            <section>
                <a href="./" class="mt-8 p-2 flex justify-center items-center w-4/12 xl:w-2/12 text-white/60 bg-green-500/60 rounded hover:text-white hover:scale-110 hover:bg-green-500/50 gap-2 transition">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    back-all-users
                </a>
                <table class="mt-6 w-6/12 mx-auto border-collapse">
                    <tbody>
                        <?php while($row = mysqli_fetch_array($data)):?>
                        <tr>
                            <img src="<?= $row['photo']?>" alt="sinFoto" class="w-52 rounded-full mx-auto">
                        </tr>
                        <tr class="bg-white/30 odd:bg-white/20 text-justify">
                            <td class="p-2">ID:</td>
                            <td class="p-2"><?= $row['id']?></td>
                        </tr>
                        <tr class="bg-white/30 odd:bg-white/20 text-justify">
                            <td>Nombre Completo: </td>
                            <td><?= $row['fullname']?></td>
                        </tr>
                        <tr class="bg-white/30 odd:bg-white/20 text-justify">
                            <td>Email: </td>
                            <td><?= $row['email']?></td>
                        </tr>
                        <tr class="bg-white/30 odd:bg-white/20 text-justify">
                            <td>Rol: </td>
                            <td><?= $row['rol']?></td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </section>
        </main>

        <script src="public/js/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.btn-delete').click(function(event){
                    $id = $(this).attr('data-id')
                    if(confirm('Are you sure ?')){
                        window.location.replace('?method=delete&id='+$id)
                    }
                })
            })
        </script>
    </body>
</html>