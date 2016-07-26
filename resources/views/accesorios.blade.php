@extends('app')

@section('content')

        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="results-container">

                        <div class="results-container-in">
                                                     
                            <div id="results-holder" class="results-grid-view">
                               
							    <div class="main" role="main">
							        <div id="content" class="content full">
							            <div class="container">
							                <div class="text-align-center error-404">

										        <div id="main">
										           
										            <!-- use the filter_reset : '.reset' option or include data-filter="" using the filter button demo code to reset the filters -->
										            <div class="bootstrap_buttons" style="margin-left: -800px">
										                <button type="button" class="reset btn btn-primary" data-column="0" data-filter=""><i class="fa fa-refresh"></i> Reiniciar filtros</button>
										                <!--
										                <br>
										                Zebra widget : <button type="button" class="zebra btn btn-success"><i class="icon-white icon-ok glyphicon glyphicon-ok"></i> <span>enabled</span></button>
										                -->
										            </div>
										            <br>
										
										            <div id="demo">
										                <table class="tablesorter">
										                    <thead>
										                        <tr>
										                            <th class="filter-select filter-exact" data-placeholder="Seleccione">País</th>
										                            <th class="filter-select filter-exact" data-placeholder="Seleccione">Ciudad</th>
										                            <th class="filter-select filter-exact" data-placeholder="Seleccione">Tipo de Vehículo</th>
										                            <th>Empresa</th>
										                            <th>Teléfono</th>
										                            <th>Dirección</th>
										                            <th>Página Web</th>
										
										                    </thead>
										                    <tfoot class="print">
										
										                        <tr>
										                            <th colspan="7" class="ts-pager form-horizontal">
										                                <button type="button" class="btn first"><i class="fa fa-step-backward"></i></button>
										                                <button type="button" class="btn prev"><i class="fa fa-backward"></i></button>
										                                <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
										                                <button type="button" class="btn next"><i class="fa fa-forward"></i></button>
										                                <button type="button" class="btn last"><i class="fa fa-step-forward"></i></button>
										                                <select class="pagesize input-mini" title="Select page size">
										                                    <option selected="selected" value="10">10</option>
										                                    <option value="20">20</option>
										                                    <option value="30">30</option>
										                                    <option value="40">40</option>
										                                </select>
										                                <select class="pagenum input-mini" title="Select page number"></select>
										                            </th>
										                        </tr>
										                    </tfoot>
										                    <tbody>
										                        <tr><td>Venezuela</td><td>Barquisimeto</td><td>Carros</td><td>Empresa ABC</td><td>70</td><td>75</td><td>80</td></tr>
										                        <tr><td>Colombia</td><td>Mathematics</td><td>Motocicletas</td><td>90</td><td>88</td><td>100</td><td>90</td></tr>
										                        <tr><td>Colombia</td><td>Languages</td><td>Motocicletas</td><td>85</td><td>95</td><td>80</td><td>85</td></tr>
										                        <tr><td>México</td><td>Languages</td><td>Aeronaves</td><td>60</td><td>55</td><td>100</td><td>100</td></tr>
										                        <tr><td>Venezuela</td><td>Caracas</td><td>Carros</td><td>Empresa ABC</td><td>80</td><td>95</td><td>80</td></tr>
										                        <tr><td>Ecuador</td><td>Mathematics</td><td>Motocicletas</td><td>100</td><td>99</td><td>100</td><td>90</td></tr>
										                        <tr><td>Ecuador</td><td>Mathematics</td><td>Aeronaves</td><td>85</td><td>68</td><td>90</td><td>90</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Motocicletas</td><td>100</td><td>90</td><td>90</td><td>85</td></tr>
										                        <tr><td>Colombia</td><td>Mathematics</td><td>Embarcaciones</td><td>80</td><td>50</td><td>65</td><td>75</td></tr>
										                        <tr><td>Colombia</td><td>Languages</td><td>Embarcaciones</td><td>85</td><td>100</td><td>100</td><td>90</td></tr>
										                        <tr><td>Chile</td><td>Languages</td><td>Embarcaciones</td><td>86</td><td>85</td><td>100</td><td>100</td></tr>
										                        <tr><td>Colombia</td><td>Mathematics</td><td>Motocicletas</td><td>100</td><td>75</td><td>70</td><td>85</td></tr>
										                        <tr><td>Venezuela</td><td>Cabudare</td><td>Embarcaciones</td><td>100</td><td>80</td><td>100</td><td>90</td></tr>
										                        <tr><td>Chile</td><td>Languages</td><td>Motocicletas</td><td>50</td><td>45</td><td>55</td><td>90</td></tr>
										                        <tr><td>Bolivia</td><td>Languages</td><td>Embarcaciones</td><td>95</td><td>35</td><td>100</td><td>90</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Carros</td><td>Empresa ABC</td><td>50</td><td>30</td><td>70</td></tr>
										                        <tr><td>Colombia</td><td>Languages</td><td>Aeronaves</td><td>80</td><td>100</td><td>55</td><td>65</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Aeronaves</td><td>30</td><td>49</td><td>55</td><td>75</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Maquinaria Agrírcola</td><td>Empresa 123</td><td>90</td><td>88</td><td>70</td></tr>
										                        <tr><td>Venezuela</td><td>San Carlos</td><td>Carros</td><td>Empresa ABC</td><td>45</td><td>40</td><td>80</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Maquinaria Agrírcola</td><td>Empresa 123</td><td>45</td><td>100</td><td>100</td></tr>
										                        <tr><td>Colombia</td><td>Mathematics</td><td>Motocicletas</td><td>100</td><td>99</td><td>100</td><td>90</td></tr>
										                        <tr><td>Colombia</td><td>Mathematics</td><td>Maquinaria Agrírcola</td><td>82</td><td>77</td><td>0</td><td>79</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Embarcaciones</td><td>100</td><td>91</td><td>13</td><td>82</td></tr>
										                        <tr><td>México</td><td>Mathematics</td><td>Carros</td><td>Empresa ABC</td><td>96</td><td>82</td><td>53</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Maquinaria Agrírcola</td><td>Empresa 123</td><td>29</td><td>56</td><td>59</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Motocicletas</td><td>86</td><td>82</td><td>69</td><td>23</td></tr>
										                        <tr><td>Chile</td><td>Languages</td><td>Carros</td><td>Empresa ABC</td><td>25</td><td>43</td><td>1</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Aeronaves</td><td>77</td><td>47</td><td>22</td><td>38</td></tr>
										                        <tr><td>México</td><td>Languages</td><td>Maquinaria Pesada</td><td>19</td><td>35</td><td>23</td><td>10</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Embarcaciones</td><td>90</td><td>27</td><td>17</td><td>50</td></tr>
										                        <tr><td>México</td><td>Languages</td><td>Motocicletas</td><td>60</td><td>75</td><td>33</td><td>38</td></tr>
										                        <tr><td>Ecuador</td><td>Mathematics</td><td>Trailers</td><td>4</td><td>31</td><td>37</td><td>15</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Trailers</td><td>77</td><td>97</td><td>81</td><td>44</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Carros</td><td>Empresa ABC</td><td>81</td><td>51</td><td>95</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Aeronaves</td><td>70</td><td>61</td><td>70</td><td>94</td></tr>
										                        <tr><td>México</td><td>Mathematics</td><td>Motocicletas</td><td>60</td><td>3</td><td>61</td><td>84</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Carros</td><td>Empresa ABC</td><td>39</td><td>0</td><td>11</td></tr>
										                        <tr><td>Bolivia</td><td>Mathematics</td><td>Embarcaciones</td><td>50</td><td>46</td><td>32</td><td>38</td></tr>
										                        <tr><td>Bolivia</td><td>Languages</td><td>Motocicletas</td><td>51</td><td>75</td><td>25</td><td>3</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Carros</td><td>Empresa ABC</td><td>34</td><td>28</td><td>78</td></tr>
										                        <tr><td>Venezuela</td><td>Languages</td><td>Embarcaciones</td><td>11</td><td>89</td><td>60</td><td>95</td></tr>
										                        <tr><td>Bolivia</td><td>Mathematics</td><td>Aeronaves</td><td>48</td><td>92</td><td>18</td><td>88</td></tr>
										                        <tr><td>Puerto Rico</td><td>Languages</td><td>Maquinaria Pesada</td><td>82</td><td>2</td><td>59</td><td>73</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Carros</td><td>91</td><td>73</td><td>37</td><td>39</td></tr>
										                        <tr><td>Puerto Rico</td><td>Languages</td><td>Maquinaria Pesada</td><td>4</td><td>8</td><td>12</td><td>10</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Motocicletas</td><td>Empresa ABC</td><td>10</td><td>6</td><td>11</td></tr>
										                        <tr><td>Puerto Rico</td><td>Languages</td><td>Motocicletas</td><td>Empresa ABC</td><td>32</td><td>21</td><td>18</td></tr>
										                        <tr><td>Venezuela</td><td>Mathematics</td><td>Motocicletas</td><td>Empresa ABC</td><td>49</td><td>49</td><td>72</td></tr>
										                        <tr><td>Bolivia</td><td>Languages</td><td>Maquinaria Pesada</td><td>Empresa 123</td><td>37</td><td>67</td><td>54</td></tr>
										                    </tbody>
										                </table>
										                
										            </div>
												</div>							                    	
							                    	
							
							                </div>
							                <div class="spacer-30"></div>
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

@endsection