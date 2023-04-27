<h1>Covid cases by continent</h1>

<table>
    <thead>
        <tr>
            <th>Continent</th>
            <th>Cases</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Asia</td>
            <td>{{ $covidByContinent['Asia'] }}</td>
        </tr>
        <tr>
            <td>Europe</td>
            <td>{{ $covidByContinent['Europe'] }}</td>
        </tr>
        <tr>
            <td>North America</td>
            <td>{{ $covidByContinent['Americas'] }}</td>
        </tr>
        <tr>
            <td>Africa</td>
            <td>{{ $covidByContinent['Africa'] }}</td>
        </tr>
        <tr>
            <td>Oceania</td>
            <td>{{ $covidByContinent['Oceania'] }}</td>
        </tr>
    </tbody>
</table>
