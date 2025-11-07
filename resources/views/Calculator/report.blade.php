@extends('layouts.base')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Estimate - 925 S Chugach St apt 10, Palmer, AK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Inter', sans-serif; }
        .bg-sol-white { background-color: #ffffff; }
        .bg-sol-off-white { background-color: #f9f9f9; }
        .bg-sol-transparent { background-color: transparent; }
        .border-sol-gray { border-color: #e5e7eb; }
        .border-sol-light-gray { border-color: #e5e7eb; }
        .text-sol-primary { color: #10b981; }
        .shadow-sm { box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body class="bg-gray-50">

<div class="calculator-client w-full" style="min-height: calc(100vh - 64px);">
    <div data-flow="solar---mysolar" class="flow-client" data-initial="{&quot;zip_code&quot;:&quot;93305&quot;}" data-v-app="">
        <div class="flex flex-col w-full bg-gray-50 mx-auto bg-sol-off-white">
            <div class="flex-1 flex flex-col mx-auto w-full mx-4 bg-sol-transparent">

                <!-- Desktop View -->
                <div class="hidden sm:block">
                    <div class="gap-4 flex flex-row items-normal justify-normal w-full mx-auto"
                         style="padding: 64px 64px 128px; background-image: url('https://dev-cdn.admin-sr.com/Austin Working/6x30efEmgH23YBga4qncTmE7JviSW34e6TgJqHjy.jpg'); background-size: cover; background-position: center top;">
                        <div class="gap-4 flex flex-row items-normal justify-center w-full mx-auto flex-1">
                            <div class="gap-4 flex flex-row items-normal justify-normal w-full mx-auto bg-sol-white border-sol-gray border-t border-l border-r border-b shadow-sm flex-1"
                                 style="padding: 26px 0px 48px 20px; border-radius: 8px; max-width: 1280px;">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start justify-normal w-full mx-auto flex-1">

                                    <!-- Left Column: Address & Map -->
                                    <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                         style="padding: 24px; border-radius: 8px;">
                                        <div class="w-full mx-auto flex-1">
                                            <div class="text-left">
                                                <h1 class="text-[32px] font-display">
                                                    <span class="relative z-1 font-bold">Your preliminary estimate</span>
                                                </h1>
                                            </div>
                                            <div class="text-left">
                                                <p class="mb-2 leading-none">
                                                    <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">
                                                        925 S Chugach St apt 10, Palmer, AK 99645, USA
                                                    </div>
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Google Map -->
                                        <div class="map-marker-container h-96 rounded-lg w-full mx-auto flex-1 overflow-hidden relative">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.605!2d-149.1092071!3d61.5961817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNjHCsDM1JzQ2LjMiTiAxNDnCsDA2JzMzLjEiVw!5e1!3m2!1sen!2sus!4v1735680000000"
                                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>

                                        <!-- Key Metrics -->
                                        <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-gray border-t border-l border-r border-b flex-1"
                                             style="padding: 12px; border-radius: 8px;">
                                            <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">System size:</span></h4></div>
                                            <div class="w-full mx-auto text-sol-primary flex-1"><h2 class="text-[28px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">7.2 kW</div></h2></div>
                                        </div>
                                        <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-gray border-t border-l border-r border-b flex-1"
                                             style="padding: 12px; border-radius: 8px;">
                                            <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">Number of panels:</span></h4></div>
                                            <div class="w-full mx-auto text-sol-primary flex-1"><h1 class="text-[32px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">18</div></h1></div>
                                        </div>
                                        <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-gray border-t border-l border-r border-b flex-1"
                                             style="padding: 12px; border-radius: 8px;">
                                            <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">Annual production:</span></h4></div>
                                            <div class="w-full mx-auto text-sol-primary flex-1"><h1 class="text-[32px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">9,010 kWh</div></h1></div>
                                        </div>
                                        <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-gray border-t border-l border-r border-b flex-1"
                                             style="padding: 12px; border-radius: 8px;">
                                            <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">25 year savings:</span></h4></div>
                                            <div class="w-full mx-auto text-sol-primary flex-1"><h1 class="text-[32px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$48,268</div></h1></div>
                                        </div>
                                        <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-gray border-t border-l border-r border-b flex-1"
                                             style="padding: 12px; border-radius: 8px;">
                                            <div class="w-full mx-auto flex-1">
                                                <p class="mb-2 leading-none">
                                                    <span class="relative z-1 text-base font-bold">Zero down monthly payment:</span><br>
                                                    <span class="relative z-1 text-base font-bold">(After tax credit applied to loan)</span>
                                                </p>
                                            </div>
                                            <div class="w-full mx-auto text-sol-primary flex-1"><h2 class="text-[28px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$101</div></h2></div>
                                        </div>
                                    </div>

                                    <!-- Right Column: Estimate Breakdown -->
                                    <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto border-sol-light-gray border-t border-l border-r border-b col-span-2"
                                         style="padding: 24px; border-radius: 8px;">
                                        <div class="w-full mx-auto flex-1 text-center" style="padding: 20px;">
                                            <h2 class="text-[28px] font-display"><span class="relative z-1 font-bold">Estimate breakdown</span></h2>
                                        </div>

                                        <!-- System Cost -->
                                        <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">System cost (cash purchase)</span></h4></div>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 items-normal justify-normal w-full mx-auto flex-1">
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Average system cost (before incentives)</span></p></div>
                                                <div class="text-left">
                                                    <h4 class="text-[20px] font-display">
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$17,901</div>
                                                        <span class="relative z-1 font-bold">&nbsp;- </span>
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$25,732</div>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Federal tax credit</span></p></div>
                                                <div class="text-left">
                                                    <h4 class="text-[20px] font-display">
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$0</div>
                                                        <span class="relative z-1 font-bold">&nbsp;- </span>
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$0</div>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Cost after incentives</span></p></div>
                                                <div class="text-left">
                                                    <h4 class="text-[20px] font-display">
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$17,401</div>
                                                        <span class="relative z-1 font-bold">&nbsp;- </span>
                                                        <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$25,232</div>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>System prices used in average</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">6</div></h4></div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Payback period</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">9</div></h4></div>
                                            </div>
                                        </div>

                                        <div class="w-full h-px bg-gray-200 mx-auto" style="margin: 24px auto;"></div>

                                        <!-- Monthly Bill Savings -->
                                        <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">Monthly electric bill savings</span></h4></div>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 items-normal justify-normal w-full mx-auto flex-1">
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Current monthly bill before solar</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$150</div></h4></div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Estimated bill after solar</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$20</div></h4></div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Monthly bill savings</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$131</div></h4></div>
                                            </div>
                                        </div>
                                        <div class="w-full mx-auto flex-1 text-sm">
                                            <p class="mb-2 leading-none"><span>Note: Monthly bill savings will increase as utility rates increase.</span></p>
                                        </div>

                                        <div class="w-full h-px bg-gray-200 mx-auto" style="margin: 24px auto;"></div>

                                        <!-- Total Savings -->
                                        <div class="w-full mx-auto flex-1"><h4 class="text-[20px] font-display"><span class="relative z-1 font-bold">Total savings and return on investment (cash purchase)</span></h4></div>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 items-normal justify-normal w-full mx-auto flex-1">
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Electric bill savings over 25 years</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">$48,268</div></h4></div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Simple return</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 animate-pulse text-gray-300 font-bold">-</div></h4></div>
                                            </div>
                                            <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto bg-sol-off-white border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                                 style="padding: 12px; border-radius: 8px;">
                                                <div class="w-full mx-auto flex-1"><p class="mb-2 leading-none"><span>Internal rate of return</span></p></div>
                                                <div class="text-left"><h4 class="text-[20px] font-display"><div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 animate-pulse text-gray-300 font-bold">-</div></h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile View (Simplified) -->
                <div class="block sm:hidden">
                    <div class="gap-4 flex flex-row items-normal justify-normal w-full mx-auto"
                         style="padding: 10px 10px 64px; background-image: url('https://dev-cdn.admin-sr.com/Austin Working/6x30efEmgH23YBga4qncTmE7JviSW34e6TgJqHjy.jpg'); background-size: cover; background-position: center top;">
                        <div class="gap-4 flex flex-row items-normal justify-center w-full mx-auto flex-1">
                            <div class="gap-4 flex flex-row items-normal justify-normal w-full mx-auto bg-sol-white border-sol-gray border-t border-l border-r border-b shadow-sm flex-1"
                                 style="padding: 26px 0px 48px 20px; border-radius: 8px; max-width: 1280px;">
                                <div class="grid grid-cols-1 gap-6 items-start justify-normal w-full mx-auto flex-1">
                                    <div class="gap-4 grid grid-cols-1 items-normal justify-normal w-full mx-auto border-sol-light-gray border-t border-l border-r border-b col-span-1"
                                         style="padding: 24px; border-radius: 8px;">
                                        <div class="w-full mx-auto flex-1">
                                            <div class="text-left">
                                                <h1 class="text-[32px] font-display">
                                                    <span class="relative z-1 font-bold">Your primary estimate</span>
                                                </h1>
                                            </div>
                                            <div class="text-left">
                                                <p class="mb-2 leading-none">
                                                    <div class="transition-all duration-500 inline-block whitespace-pre-wrap px-1 font-bold">
                                                        925 S Chugach St apt 10, Palmer, AK 99645, USA
                                                    </div>
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Mobile Map Placeholder -->
                                        <div class="h-64 bg-gray-200 rounded-lg w-full mx-auto flex items-center justify-center text-gray-500">
                                            Map View (Embedded in Desktop)
                                        </div>

                                        <!-- Mobile Key Metrics -->
                                        <div class="space-y-3">
                                            <div class="bg-sol-off-white border border-sol-gray rounded-lg p-3">
                                                <h4 class="text-lg font-bold">System size:</h4>
                                                <p class="text-2xl text-sol-primary font-bold">7.2 kW</p>
                                            </div>
                                            <div class="bg-sol-off-white border border-sol-gray rounded-lg p-3">
                                                <h4 class="text-lg font-bold">Number of panels:</h4>
                                                <p class="text-3xl text-sol-primary font-bold">18</p>
                                            </div>
                                            <div class="bg-sol-off-white border border-sol-gray rounded-lg p-3">
                                                <h4 class="text-lg font-bold">Annual production:</h4>
                                                <p class="text-3xl text-sol-primary font-bold">9,010 kWh</p>
                                            </div>
                                            <div class="bg-sol-off-white border border-sol-gray rounded-lg p-3">
                                                <h4 class="text-lg font-bold">25 year savings:</h4>
                                                <p class="text-3xl text-sol-primary font-bold">$48,268</p>
                                            </div>
                                            <div class="bg-sol-off-white border border-sol-gray rounded-lg p-3">
                                                <h4 class="text-lg font-bold">Zero down monthly payment:</h4>
                                                <p class="text-2xl text-sol-primary font-bold">$101</p>
                                                <p class="text-sm text-gray-600">(After tax credit applied to loan)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mobile Breakdown -->
                                    <div class="border border-sol-light-gray rounded-lg p-4">
                                        <h2 class="text-2xl font-bold text-center mb-4">Estimate breakdown</h2>
                                        <div class="space-y-3 text-sm">
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>Average system cost (before incentives)</p>
                                                <p class="font-bold">$17,901 – $25,732</p>
                                            </div>
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>Federal tax credit</p>
                                                <p class="font-bold">$0 – $0</p>
                                            </div>
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>Cost after incentives</p>
                                                <p class="font-bold">$17,401 – $25,232</p>
                                            </div>
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>Payback period</p>
                                                <p class="font-bold">9 years</p>
                                            </div>
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>Monthly bill savings</p>
                                                <p class="font-bold">$131</p>
                                            </div>
                                            <div class="bg-sol-off-white p-3 rounded-lg border">
                                                <p>25-year savings</p>
                                                <p class="font-bold">$48,268</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
