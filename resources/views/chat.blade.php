<x-app-layout>

    <div id="bigBox" class="bg-dark d-flex" style="height: 92vh;">
        <div id="contacts" class="w-25 mt-2 ml-2">
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
            <div id="contact1" class="d-flex justify-content-between border rounded mt-2 pr-5 pl-2">
                <img src="" alt="FotoContacto" class="text-white">
                <strong class="text-white">NOMBRE</strong>
            </div>
        </div>

        <div id="chatBox" class="container bg-dark">
            <div id="chat" class="bg-secondary mt-3" style="height: 90%;"></div>
            <div>
                <form action="" method="post" class="d-flex justify-content-between mt-1">
                    @csrf
                    <input type="text" name="message" id="" placeholder="Write something" style="width: 84%; height: 5vh;" class="pl-2">
                    <input type="button" value="Send" style="width: 15%;">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>