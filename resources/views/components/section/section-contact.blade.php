<x-partial.section class="bg-primary-950 antialiased" id='contact'>
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-sm">
        <h2 class="mb-4 text-4xl tracking-tight text-center font-semibold uppercase text-primary-50">
            Let's Get In Touch</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-primary-300 sm:text-xl">Already have a plan for
            your business's website? Still have doubts whether your business needs a website or not? Or you just
            want to ask something about website for a business? No problem at all, just fill the form and I will
            contact you right away!</p>
        <div id="notification" class="bg-primary-200 border-4 border-primary-400 rounded-lg p-4 hidden mb-12">
            <p class="text-center text-primary-700">Your inquiry has been sent! I will reach out to you soon. Thanks 🙏😊
            </p>
        </div>
        <form method="POST" id="inquiryForm" class="space-y-8 pb-16 border-b border-primary-700 block">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-primary-200">Your
                    Name</label>
                <input autocomplete="name" type="text" id="name" name="name"
                    class="shadow-sm bg-primary-50 border border-primary-300 text-primary-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-primary-700 dark:border-primary-600 dark:placeholder-primary-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Your name goes here... Ex: Alfaruqy" required>
            </div>
            <div>
                <label autocomplete="email" for="email" class="block mb-2 text-sm font-medium text-primary-200">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="shadow-sm bg-primary-50 border border-primary-300 text-primary-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-primary-700 dark:border-primary-600 dark:placeholder-primary-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Your email goes here... Ex: contact@alfaruqy.me" required>
            </div>
            <div>
                <label autocomplete="on" for="subject"
                    class="block mb-2 text-sm font-medium text-primary-200">Subject</label>
                <input type="text" id="subject" name="subject"
                    class="block p-3 w-full text-sm text-primary-900 bg-primary-50 rounded-lg border border-primary-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-primary-700 dark:border-primary-600 dark:placeholder-primary-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="How I can help you... Ex: Need Website for My Business's Marketing" required>
            </div>
            <div>
                <input type="text" name="business-industry" id="business-industry" class="hidden invisible"
                    autocomplete="off">
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-primary-200">Your
                    message</label>
                <textarea id="message" rows="6" name="message"
                    class="block p-2.5 w-full text-sm text-primary-900 bg-primary-50 rounded-lg shadow-sm border border-primary-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-primary-700 dark:border-primary-600 dark:placeholder-primary-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Write your message or inquiry for me here..." required></textarea>
            </div>
            <button type="submit"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-primary-600 to-primary-300 group-hover:from-primary-600 group-hover:to-primary-400 hover:text-primary-50 text-primary-50 focus:ring-4 focus:outline-none focus:ring-primary-200 dark:focus:ring-primary-800 cursor-pointer uppercase"><span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-primary-800 rounded-md group-hover:bg-opacity-0 flex gap-2 justify-center items-center uppercase">
                    Send Message <div><svg class="w-6 h-6 text-primary-50 transition-all group-hover:scale-110"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </span>
            </button>
        </form>
        <div class="-mt-4 flex justify-center items-center flex-col flex-wrap sm:flex-nowrap">
            <h3
                class="mb-4 text-xl tracking-tight text-center font-normal uppercase text-primary-50 bg-primary-950 px-4">
                Or you can
                reach out to me through</h3>
            <div class="flex gap-4 text-primary-200">
                <a class="flex gap-2 py-2 px-2 sm:px-4 border border-primary-300 rounded-lg transition-all hover:bg-primary-800"
                    href="mailto:contact@alfaruqy.me?subject=Inquiry%3A%20Website%20for%20My%20Business&body=Hi%20Alfaruqy%2C%20I%20would%20like%20to%20create%20website%20for%20my%20business.%20Can%20you%20help%20me%20with%20that.%20Here%20is%20little%20bit%20info%20for%20my%20business%3A%0A%0A-Industry%3A%0A-Number%20of%20Employee%3A%0A-My%20Existing%20website%3A%20(skip%20if%20I%20don't%20have%20one)%0A%0AI%20would%20like%20to%20hear%20your%20input%2C%20I'm%20available%20at%20%5BFill%20a%20date%5D%20for%20an%20online%20appointment.%0A%0A"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <span>contact@alfaruqy.me</span></a>
                <a class="flex gap-2 py-2 px-2 sm:px-4 border border-primary-300 rounded-lg transition-all hover:bg-primary-800"
                    href="https://wa.link/gh5vpo"><svg class="w-6 h-6" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                            clip-rule="evenodd" />
                        <path fill="currentColor"
                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                    </svg>
                    <span>+62 821-2212-7825</span></a>
            </div>
        </div>
    </div>
</x-partial.section>
