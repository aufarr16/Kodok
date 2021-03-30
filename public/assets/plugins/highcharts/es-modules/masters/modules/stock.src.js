/**
 * @license Highstock JS v9.0.1 (2021-03-26)
 * @module highcharts/modules/stock
 * @requires highcharts
 *
 * Highstock as a plugin for Highcharts
 *
 * (c) 2010-2021 Torstein Honsi
 *
 * License: www.highcharts.com/license
 */
'use strict';
import Highcharts from '../../Core/Globals.js';
import '../../Core/Axis/OrdinalAxis.js';
import './broken-axis.src.js';
import '../../Extensions/DataGrouping.js';
import '../../Series/OHLC/OHLCSeries.js';
import '../../Series/Candlestick/CandlestickSeries.js';
import '../../Series/Flags/FlagsSeries.js';
import '../../Core/Scrollbar.js';
import '../../Core/Navigator.js';
import '../../Extensions/RangeSelector.js';
import StockChart from '../../Core/Chart/StockChart.js';
Highcharts.StockChart = Highcharts.stockChart = StockChart.stockChart;
