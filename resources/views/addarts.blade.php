@include('header')
@section('content')

        <main>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                           Add Arts
                        </h2>
                        <p class="mb-4">Add Arts to sell your artwork</p>
                    </header>

                    <form action="/addarts" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-6">
                            <label for="username" class="inline-block text-lg mb-2"
                                >Product Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="price" class="inline-block text-lg mb-2"
                                >Price</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="price"
                            />
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>Category <br><br>
                                  <input type="radio" value="image" name="category">Image <br>
                                  <input type="radio" value="file" name="category">File</label><br>
                               <input type="radio" value="video" name="category">Video</label><br>
                              </div>
                            </div>

                            <div class="mb-6">
                                <label for="Description" class="inline-block text-lg mb-2"
                                    >Description</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="description"
                                />
                            </div>
                         
                            <div class="mb-6">
                                <label for="Email" class="inline-block text-lg mb-2"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="email"
                                />
                            </div>
                         
                            </div>
                            <div class="mb-6">
                                <label for="Seller-Contact" class="inline-block text-lg mb-2"
                                    >Seller </label
                                >
                               
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="contact"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="Contact" class="inline-block text-lg mb-2"
                                    >Contact </label
                                >
                               
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="seller"
                                />
                            </div>

                            <div class="mb-6">
                                <label for="image" class="inline-block text-lg mb-2"
                                    >Upload Art</label
                                >
                                <input type="file" id="myFile" name="gallery">
                            </div>


                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                              Add Art
                            </button>
                        </div>

                      
                    </form>
                </div>
            </div>
        </main>

    </body>
</html>
