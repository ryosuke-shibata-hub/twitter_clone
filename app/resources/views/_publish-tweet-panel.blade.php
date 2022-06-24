             <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
                <form action="{{ route('tweet') }}" method="POST">
                    @csrf
                        <textarea
                            name="body"
                            class="w-full"
                            placeholder="what's up doc?"
                            required
                            autofocus
                        ></textarea>

                        <hr class="my-4">

                        <footer class="flex justify-between items-center">
                            <img
                                class="rounded-full mr-2"
                                width="50"
                                height="50"
                                src="{{ auth()->user()->avatar }}"
                                alt="your avatar">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-10 text-sm text-white h-10">Tweet</button>
                        </footer>
                </form>
                @error('body')
                    <p class="text-sm" style="color: red;margin-top:20px;">{{ $message }}</p>
                @enderror
            </div>
