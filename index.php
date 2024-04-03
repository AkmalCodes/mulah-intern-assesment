<?php
include 'backend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables Side by Side</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">
    <div class="flex flex-wrap justify-around">
        <div class="table-container w-full md:w-1/2 p-4">
            <h1 class="text-lg font-bold">Table 1</h1>
            <table class="min-w-full leading-normal mt-2">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Index #</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($dataMap as $key => $value) {
                        echo "<tr>";
                        echo "<td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>$key</td>";
                        echo "<td class='px-5 py-5 border-b border-gray-200 bg-white text-right'>$value</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-container w-full md:w-1/2 p-4">
            <h1 class="text-lg font-bold">Table 2</h1>
            <table class="min-w-full leading-normal mt-2">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Category</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>Alpha</td>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>A5 + A20 = <?php echo $alpha; ?></td>
                    </tr>
                    <tr>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>Beta</td>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>A15 / A7 = <?php echo $beta; ?></td>
                    </tr>
                    <tr>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>Charlie</td>
                        <td class='px-5 py-5 border-b border-gray-200 bg-white text-sm'>A13 + A12 = <?php echo $charlie; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
