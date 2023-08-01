<form class="space-y-5 md:w-1/2">
    <div>
        <x-input-label
            for="title"
            :value="'Título de la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="title"
            name="title"
            type="text"
            :value="old('title')"
            placeholder="Título de la vacante"
        />
        <x-input-error
            class="mt-2"
            :messages="$errors->get('title')"
        />
    </div>

    <div>
        <x-input-label
            for="salary"
            :value="'Salario mensual'"
        />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="salary"
            name="salary"
        >
            <option>-- Seleccione un rango --</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{$salary->salary}}</option>
            @endforeach

        </select>

        <x-input-error
            class="mt-2"
            :messages="$errors->get('salary')"
        />
    </div>

    <div>
        <x-input-label
            for="category"
            :value="'Categoría'"
        />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="category"
            name="category"
        >
        <option>-- Seleccione una categoría --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->salary}}</option>
        @endforeach

        </select>

        <x-input-error
            class="mt-2"
            :messages="$errors->get('category')"
        />
    </div>

    <div>
        <x-input-label
            for="company"
            :value="'Nombre de la empresa'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="company"
            name="company"
            type="text"
            :value="old('company')"
            placeholder="Nombre de la empresa: ej. Google, Netflix, Shopify ..."
        />
        <x-input-error
            class="mt-2"
            :messages="$errors->get('company')"
        />
    </div>

    <div>
        <x-input-label
            for="last_day_of_vacant"
            :value="'Último día para aplicar la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="last_day_of_vacant"
            name="last_day_of_vacant"
            type="text"
            :value="old('last_day_of_vacant')"
            placeholder="Último día para aplicar la vacante"
        />
        <x-input-error
            class="mt-2"
            :messages="$errors->get('last_day_of_vacant')"
        />
    </div>

    <div>
        <x-input-label
            for="description"
            :value="'Descripción de la vacante'"
        />
        <textarea
            class="h-72 min-h-[100px] w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            name="description"
            placeholder="Descripción del puesto, experiencia, tipo de trabajo a realizar y cualquier información relevante de la vacante"
        ></textarea>
        <x-input-error
            class="mt-2"
            :messages="$errors->get('description')"
        />
    </div>

    <div>
        <x-input-label
            for="image"
            :value="'Imagen de la empresa o que se desee mostrar en la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="image"
            name="image"
            type="file"
        />
        <x-input-error
            class="mt-2"
            :messages="$errors->get('image')"
        />
    </div>

    <x-primary-button class="flex w-full items-center justify-center">
        <span>Crear vacante</span>
    </x-primary-button>
</form>
