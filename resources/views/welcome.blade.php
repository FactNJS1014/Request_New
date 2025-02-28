<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <blockquote class="relative p-4 mt-5">
        <span
            class="icon-[tabler--quote] text-base-300/80 absolute -start-3 -top-3 size-16 rotate-180 rtl:rotate-0"></span>

        <div class="relative z-[1]">
            <p class="text-base-content text-lg">
                <em>
                    The blockquote element is ideal for showcasing well-known quotes within content. It's commonly used
                    for
                    testimonials, reviews, and notable quotes in articles.
                </em>
            </p>
        </div>

        <div class="vertical-scrollbar shadow max-h-56 w-full p-4 mt-5">
            <ul class="space-y-5">
              <li>
                <span class="text-base-content font-semibold">Item 1</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 1. It contains some details about the first item on the list.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 1-1</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 1-1. It provides additional information about the first sub-item.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 1-2</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 1-2. It gives more details about the second sub-item.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 2</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 2. It explains what the second item on the list is about.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 3</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 3. It provides context for the third item on the list.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 3-1</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 3-1. It gives more information about the first sub-item of Item 3.
                </p>
              </li>
              <li>
                <span class="text-base-content font-semibold">Item 3-2</span>
                <p class="text-base-content/80 mt-1 text-base">
                  This is a description for Item 3-2. It explains further about the second sub-item of Item 3.
                </p>
              </li>
            </ul>
          </div>
    </blockquote>
    <div class="flex items-center">
        <span class="icon-[solar--user-bold] size-10 text-orange-400"></span>
        <span class="icon-[ic--sharp-account-circle] size-10"></span>
        <span class="icon-[mdi--account-child] size-10"></span>
        <span class="icon-[line-md--account] size-10"></span>
        <span class="icon-[svg-spinners--3-dots-move] size-10"></span>
      </div>
</body>

</html>
