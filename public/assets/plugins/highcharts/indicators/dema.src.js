/**
 * @license Highstock JS v9.0.1 (2021-03-26)
 *
 * Indicator series type for Highstock
 *
 * (c) 2010-2021 Rafał Sebestjański
 *
 * License: www.highcharts.com/license
 */
'use strict';
(function (factory) {
    if (typeof module === 'object' && module.exports) {
        factory['default'] = factory;
        module.exports = factory;
    } else if (typeof define === 'function' && define.amd) {
        define('highcharts/indicators/dema', ['highcharts', 'highcharts/modules/stock'], function (Highcharts) {
            factory(Highcharts);
            factory.Highcharts = Highcharts;
            return factory;
        });
    } else {
        factory(typeof Highcharts !== 'undefined' ? Highcharts : undefined);
    }
}(function (Highcharts) {
    var _modules = Highcharts ? Highcharts._modules : {};
    function _registerModule(obj, path, args, fn) {
        if (!obj.hasOwnProperty(path)) {
            obj[path] = fn.apply(null, args);
        }
    }
    _registerModule(_modules, 'Mixins/IndicatorRequired.js', [_modules['Core/Utilities.js']], function (U) {
        /**
         *
         *  (c) 2010-2021 Daniel Studencki
         *
         *  License: www.highcharts.com/license
         *
         *  !!!!!!! SOURCE GETS TRANSPILED BY TYPESCRIPT. EDIT TS FILE ONLY. !!!!!!!
         *
         * */
        var error = U.error;
        /* eslint-disable no-invalid-this, valid-jsdoc */
        var requiredIndicatorMixin = {
                /**
                 * Check whether given indicator is loaded,
            else throw error.
                 * @private
                 * @param {Highcharts.Indicator} indicator
                 *        Indicator constructor function.
                 * @param {string} requiredIndicator
                 *        Required indicator type.
                 * @param {string} type
                 *        Type of indicator where function was called (parent).
                 * @param {Highcharts.IndicatorCallbackFunction} callback
                 *        Callback which is triggered if the given indicator is loaded.
                 *        Takes indicator as an argument.
                 * @param {string} errMessage
                 *        Error message that will be logged in console.
                 * @return {boolean}
                 *         Returns false when there is no required indicator loaded.
                 */
                isParentLoaded: function (indicator,
            requiredIndicator,
            type,
            callback,
            errMessage) {
                    if (indicator) {
                        return callback ? callback(indicator) : true;
                }
                error(errMessage || this.generateMessage(type, requiredIndicator));
                return false;
            },
            /**
             * @private
             * @param {string} indicatorType
             *        Indicator type
             * @param {string} required
             *        Required indicator
             * @return {string}
             *         Error message
             */
            generateMessage: function (indicatorType, required) {
                return 'Error: "' + indicatorType +
                    '" indicator type requires "' + required +
                    '" indicator loaded before. Please read docs: ' +
                    'https://api.highcharts.com/highstock/plotOptions.' +
                    indicatorType;
            }
        };

        return requiredIndicatorMixin;
    });
    _registerModule(_modules, 'Stock/Indicators/DEMA/DEMAIndicator.js', [_modules['Mixins/IndicatorRequired.js'], _modules['Core/Series/SeriesRegistry.js'], _modules['Core/Utilities.js']], function (RequiredIndicatorMixin, SeriesRegistry, U) {
        /* *
         *
         *  License: www.highcharts.com/license
         *
         *  !!!!!!! SOURCE GETS TRANSPILED BY TYPESCRIPT. EDIT TS FILE ONLY. !!!!!!!
         *
         * */
        var __extends = (this && this.__extends) || (function () {
                var extendStatics = function (d,
            b) {
                    extendStatics = Object.setPrototypeOf ||
                        ({ __proto__: [] } instanceof Array && function (d,
            b) { d.__proto__ = b; }) ||
                        function (d,
            b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
                return extendStatics(d, b);
            };
            return function (d, b) {
                extendStatics(d, b);
                function __() { this.constructor = d; }
                d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
            };
        })();
        var EMAIndicator = SeriesRegistry.seriesTypes.ema;
        var correctFloat = U.correctFloat,
            isArray = U.isArray,
            merge = U.merge;
        /**
         * The DEMA series Type
         *
         * @private
         * @class
         * @name Highcharts.seriesTypes.dema
         *
         * @augments Highcharts.Series
         */
        var DEMAIndicator = /** @class */ (function (_super) {
                __extends(DEMAIndicator, _super);
            function DEMAIndicator() {
                var _this = _super !== null && _super.apply(this,
                    arguments) || this;
                _this.EMApercent = void 0;
                _this.data = void 0;
                _this.options = void 0;
                _this.points = void 0;
                return _this;
            }
            DEMAIndicator.prototype.init = function () {
                var args = arguments,
                    ctx = this;
                RequiredIndicatorMixin.isParentLoaded(EMAIndicator, 'ema', ctx.type, function (indicator) {
                    indicator.prototype.init.apply(ctx, args);
                    return;
                });
            };
            DEMAIndicator.prototype.getEMA = function (yVal, prevEMA, SMA, index, i, xVal) {
                return EMAIndicator.prototype.calculateEma(xVal || [], yVal, typeof i === 'undefined' ? 1 : i, this.EMApercent, prevEMA, typeof index === 'undefined' ? -1 : index, SMA);
            };
            DEMAIndicator.prototype.getValues = function (series, params) {
                var period = params.period,
                    doubledPeriod = 2 * period,
                    xVal = series.xData,
                    yVal = series.yData,
                    yValLen = yVal ? yVal.length : 0,
                    index = -1,
                    accumulatePeriodPoints = 0,
                    SMA = 0,
                    DEMA = [],
                    xDataDema = [],
                    yDataDema = [],
                    EMA = 0, 
                    // EMA(EMA)
                    EMAlevel2, 
                    // EMA of previous point
                    prevEMA,
                    prevEMAlevel2, 
                    // EMA values array
                    EMAvalues = [],
                    i,
                    DEMAPoint;
                this.EMApercent = (2 / (period + 1));
                // Check period, if bigger than EMA points length, skip
                if (yValLen < 2 * period - 1) {
                    return;
                }
                // Switch index for OHLC / Candlestick / Arearange
                if (isArray(yVal[0])) {
                    index = params.index ? params.index : 0;
                }
                // Accumulate first N-points
                accumulatePeriodPoints =
                    EMAIndicator.prototype.accumulatePeriodPoints(period, index, yVal);
                // first point
                SMA = accumulatePeriodPoints / period;
                accumulatePeriodPoints = 0;
                // Calculate value one-by-one for each period in visible data
                for (i = period; i < yValLen + 2; i++) {
                    if (i < yValLen + 1) {
                        EMA = this.getEMA(yVal, prevEMA, SMA, index, i)[1];
                        EMAvalues.push(EMA);
                    }
                    prevEMA = EMA;
                    // Summing first period points for EMA(EMA)
                    if (i < doubledPeriod) {
                        accumulatePeriodPoints += EMA;
                    }
                    else {
                        // Calculate DEMA
                        // First DEMA point
                        if (i === doubledPeriod) {
                            SMA = accumulatePeriodPoints / period;
                        }
                        EMA = EMAvalues[i - period - 1];
                        EMAlevel2 = this.getEMA([EMA], prevEMAlevel2, SMA)[1];
                        DEMAPoint = [
                            xVal[i - 2],
                            correctFloat(2 * EMA - EMAlevel2)
                        ];
                        DEMA.push(DEMAPoint);
                        xDataDema.push(DEMAPoint[0]);
                        yDataDema.push(DEMAPoint[1]);
                        prevEMAlevel2 = EMAlevel2;
                    }
                }
                return {
                    values: DEMA,
                    xData: xDataDema,
                    yData: yDataDema
                };
            };
            /**
             * Double exponential moving average (DEMA) indicator. This series requires
             * `linkedTo` option to be set and should be loaded after the
             * `stock/indicators/indicators.js` and `stock/indicators/ema.js`.
             *
             * @sample {highstock} stock/indicators/dema
             *         DEMA indicator
             *
             * @extends      plotOptions.ema
             * @since        7.0.0
             * @product      highstock
             * @excluding    allAreas, colorAxis, compare, compareBase, joinBy, keys,
             *               navigatorOptions, pointInterval, pointIntervalUnit,
             *               pointPlacement, pointRange, pointStart, showInNavigator,
             *               stacking
             * @requires     stock/indicators/indicators
             * @requires     stock/indicators/ema
             * @requires     stock/indicators/dema
             * @optionparent plotOptions.dema
             */
            DEMAIndicator.defaultOptions = merge(EMAIndicator.defaultOptions);
            return DEMAIndicator;
        }(EMAIndicator));
        SeriesRegistry.registerSeriesType('dema', DEMAIndicator);
        /* *
         *
         *  Default Export
         *
         * */
        /**
         * A `DEMA` series. If the [type](#series.ema.type) option is not
         * specified, it is inherited from [chart.type](#chart.type).
         *
         * @extends   series,plotOptions.ema
         * @since     7.0.0
         * @product   highstock
         * @excluding allAreas, colorAxis, compare, compareBase, dataParser, dataURL,
         *            joinBy, keys, navigatorOptions, pointInterval, pointIntervalUnit,
         *            pointPlacement, pointRange, pointStart, showInNavigator, stacking
         * @requires  stock/indicators/indicators
         * @requires  stock/indicators/ema
         * @requires  stock/indicators/dema
         * @apioption series.dema
         */
        ''; // adds doclet above to the transpiled file

        return DEMAIndicator;
    });
    _registerModule(_modules, 'masters/indicators/dema.src.js', [], function () {


    });
}));