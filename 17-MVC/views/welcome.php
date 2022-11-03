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
                <a href="?method=add" class="mt-8 p-2 flex justify-center items-center w-4/12 xl:w-2/12 text-white/60 bg-green-500/60 rounded hover:text-white hover:scale-110 hover:bg-green-500/50 gap-2 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                    Add User
                </a>
                <?php if(isset($_SESSION['actualizado'])):?>
                    <div class="bg-green-600 my-1 border-2 border-black/60 p-2 w-6/12 text-2xl rounded text-center mx-auto">
                        <p>Se actualizo con exito</p>
                    </div>
                    <?php unset($_SESSION['actualizado'])?>
                <?php elseif(isset($_SESSION['eliminado'])):?>
                    <div class="bg-red-600 my-1 border-2 border-black/60 p-2 w-6/12 text-2xl rounded text-center mx-auto">
                        <p>Se elimino con exito</p>
                    </div>
                    <?php unset($_SESSION['eliminado'])?>
                <?php elseif(isset($_SESSION['creado'])):?>
                    <div class="bg-blue-600 my-1 border-2 border-black/60 p-2 w-6/12 text-2xl rounded text-center mx-auto">
                        <p>Se agrego el usuario con exito</p>
                        <?php if(isset($_SESSION['imgMove'])):?>
                            <p>La imagen se movio correctamente</p>
                            <?php unset($_SESSION['imgMove'])?>
                        <?php endif?>
                    </div>
                    <?php unset($_SESSION['creado'])?>
                <?php endif?>
                <table class="mt-6 w-[100%] mx-auto border-collapse">
                    <thead>
                        <tr class="bg-black/40 text-white/60 border-b-2 border-white/70 text-justify">
                            <th class=" rounded-tl-md  p-2">ID</th>
                            <th>Full name</th>
                            <th>Photo</th>
                            <th class="rounded-br-md">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($data)):?>
                        <tr class="bg-white/30 odd:bg-white/20 text-justify">
                            <td class="p-2"><?= $row['id']?></td>
                            <td><?= $row['fullname']?></td>
                            <td class="">
                                <img src="public/img/<?= $row['photo']?>" alt="sinFoto" class="w-10 rounded-full mx-auto">
                            </td>
                            <td class="flex justify-evenly">
                                <a href="?method=show&id=<?=$row['id']?>">
                                    <svg class="my-1 w-8 h-8 rounded-full bg-black/10 text-white hover:scale-105" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd"></path></svg>
                                </a>
                                <a href="?method=edit&id=<?=$row['id']?>">
                                    <svg class="my-1 w-8 h-8 rounded-full bg-blue-700 text-white hover:scale-105" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                </a>
                                <a href="javascript:;" data-id="<?=$row['id']?>" class="btn-delete">
                                    <svg class="my-1 w-8 h-8 rounded-full bg-red-700 text-white hover:scale-105" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                </a>
                            </td>
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