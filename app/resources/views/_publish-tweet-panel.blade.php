             <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
                <form action="{{ route('tweet') }}" method="POST">
                    @csrf
                        <textarea
                            name="body"
                            class="w-full"
                            placeholder="what's up doc?"
                            {{-- required --}}
                        ></textarea>

                        <hr class="my-4">

                        <footer class="flex justify-between">
                            <img
                                class="rounded-full mr-2"
                                src="{{ auth()->user()->avatar }}"
                                alt="your avatar">

                            <button type="submit" class="bg-blue-500 shadow rounded-lg py-4 px-2 text-white">Tweet-a-pool</button>
                        </footer>
                </form>
                @error('body')
                    <p class="text-sm" style="color: red;margin-top:20px;">{{ $message }}</p>
                @enderror
            </div>
