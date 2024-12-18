<x-layouts.main>
    {{--    <div class="border-8 border-black-800">about.index page</div>--}}

    {{--    <div>--}}
    {{--        Go to <a href="{{ route('hello.age', ['name' => 'World', 'age' => 20]) }}">Hello World</a>--}}
    {{--    </div>--}}

    <body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    <header class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-10 transition-colors duration-300">

    </header>

    <main class="container mx-auto px-6 py-20">
        <section class="mb-20 pt-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-primary-light dark:text-primary-dark text-center">About Me</h1>
        </section>

        <section class="mb-10">
            <h2 class="text-3xl text-center font-bold mb-8 text-primary-light dark:text-primary-dark">Personal Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Panuwit Sungthoop</h3>
                    <ul class="mb-4">
                        <li>Name : Panuwit Sungthoop</li>
                        <li>Age : 20</li>
                        <li>Student ID : 6510450798</li>
                        <li>Birthdate : 1st January 2004</li>
                        <li>Address : Chatuchak, Bangkok, 10900</li>
                        <li>Phone : 0995434290</li>
                        <li>Email : panuwit_89@hotmail.com</li>
                        <li>Education : Computer Science, Kasetsart University</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <img src="{{ url('/images/nu_get_2.jpg') }}" alt="Profile Picture" class="rounded-md w-48 h-54 mx-auto mb-4 border-8 border-black transition-transform duration-300 hover:scale-110 ring ring-gray-400 origin-bottom">
                </div>
            </div>
        </section>

        <section class="mb-10">
            <h2 class="text-3xl text-center font-bold mb-8 text-primary-light dark:text-primary-dark">Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 md:grid-cols-4 gap-8">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Technical Skills</h3>
                    <ul class="mb-4">
                        <li>Python</li>
                        <li>C / C++</li>
                        <li>Java</li>
                        <li>SQL</li>
                        <li>R</li>
                        <li>Machine Learning</li>
                        <li>Data Visualization</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Developer Tools</h3>
                    <ul class="mb-4">
                        <li>Git</li>
                        <li>Salesforce</li>
                        <li>Beecy ERP</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Soft Skills</h3>
                    <ul class="mb-4">
                        <li>Adaptability</li>
                        <li>Collaboration</li>
                        <li>Fast Learning</li>
                        <li>Time Management</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Languages</h3>
                    <ul class="mb-4">
                        <li>Thai (Native)</li>
                        <li>English (Intermediate)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-20">
            <h2 class="text-3xl text-center font-bold mb-8 text-primary-light dark:text-primary-dark">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105 transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Construction and maintenance tracking system</h3>
                    <p class="mb-4"> Designed the business flow and gathered requirements from the user.
                        Developed a web application to provide information about construction projects and
                        calculate material prices from different stores.
                        Designed a database system to manage the materials inventory.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105 transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Chinese Medicine Clinic Database</h3>
                    <p class="mb-4"> Collected information and requirements from the clinic.
                        Created an ER diagram, normalized tables, and set up the database.
                        Designed a database system to manage medical and financial records</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105 transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2"> Smoking and Drinking Dataset Analysis</h3>
                    <p class="mb-4">Researched relevant information related to the dataset.
                        Cleaned the data by handling outliers and missing values.
                        Developed machine learning models to predict drinkers and smoking levels.
                        Tested hypotheses based on dataset features and calculated the p-value.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105 transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2">Food Allegy Line Chatbot</h3>
                    <p class="mb-4">Developed a Line Chatbot using Python to provide users with information about food
                        allergies.
                        Used the PyThaiNLP library to tokenize custom sentences from the dataset and create a word
                        dictionary.
                        Developed a CNN model to predict responses based on input sentences.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:scale-105 transition-transform">
                    <h3 class="text-xl text-center font-semibold mb-2"> Event Management Application</h3>
                    <p class="mb-4">Developed a secure login system using bcrypt for password hashing.
                        Developed an application to create, manage, and join events.
                        Used Java with OOP and MVC architecture, along with SceneBuilder for UI design.</p>
                </div>
            </div>
        </section>
    </main>

    {{--    <div class="text-red-700">{{ $content }}</div>--}}
    {{--    <div class="text-green-700">{!! $content !!}</div>--}}
    {{--    <div class="text-red-700">@{{ $content }}</div>--}}
    {{--    <div class="text-green-700">@{!! $content !!}</div>--}}

    </body>
</x-layouts.main>

